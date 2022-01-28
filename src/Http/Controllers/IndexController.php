<?php

namespace FlashVps\Docs\Http\Controllers;

use App;
use Arr;
use File;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use SEO;
use Str;
use Symfony\Component\Finder\SplFileInfo;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $lang = $request->segment(2, 'vi');
        App::setLocale($lang);
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
            ->sort()
            ->keyBy(function ($dir) {
                return __((string) Str::of(basename($dir))->substr(3));
            })->map(function ($dir) use ($startDir) {
                return collect(File::files($dir))->map(function (SplFileInfo $f) use ($startDir) {
                    $name = Str::of($f->getFilenameWithoutExtension())->substr(3);

                    return [
                        'link' => $startDir.$name,
                        'text' => __(Str::headline($name)),
                    ];
                });
            });

        SEO::setTitle('FlashVPS: '.__(Str::headline($lastSegment)));
        SEO::opengraph()->setType('article');
        SEO::opengraph()->setUrl($request->url());
        SEO::setDescription(Str::of(strip_tags($content))
            ->replace("\n", '. ')
            ->replace('. . ', '. ')
            ->replace('. . ', '. ')
            ->limit(200, '...'));

        return view('docs::index', compact('content', 'menus'));
    }
}
