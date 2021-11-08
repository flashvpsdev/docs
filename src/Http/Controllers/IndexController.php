<?php

namespace FlashVps\Docs\Http\Controllers;

use App;
use Arr;
use File;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Str;
use Symfony\Component\Finder\SplFileInfo;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $lang = App::getLocale();
        $startDir = '/docs/'.$lang.'/1.0/';
        abort_if(! Str::of($request->path())->start('/')->startsWith($startDir), 404);

        $path = base_path('packages/docs/resources').$startDir;
        $files = File::allFiles($path);
        $lastSegment = Arr::last($request->segments());
        /** @var SplFileInfo $file */
        $file = collect($files)->first(fn (SplFileInfo $f) => Str::of($f->getFilenameWithoutExtension())->endsWith($lastSegment));

        abort_if(! $file, 404);
        $content = Str::of($file->getContents())->markdown();
        $menus = collect(File::directories($path))
            ->keyBy(function ($dir) {
                return basename($dir);
            })->map(function ($dir) use ($startDir) {
                return collect(File::files($dir))->map(function (SplFileInfo $f) use ($dir, $startDir) {
                    $name = Str::of($f->getFilenameWithoutExtension())->substr(3);

                    return [
                        'link' => $startDir.$name,
                        'text' => Str::headline($name),
                    ];
                });
            });

        return view('docs::index', compact('content', 'menus'));
    }
}
