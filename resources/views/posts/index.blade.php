<x-app-layout>
    <div class="container py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($postsControl as $post)
                {{-- Obtiene como respuesta el url=http://laravel-8-blog-administrativo.test/storage/posts/5ecefb96991adf9bdf9597737393228d.png --}}
                <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 @endif " style="background-image:url({{Storage::url($post->imageModel->url)}})">
                    <div class="w-full h-full px-8 flex flex-col justify-center">
                        <div>
                            @foreach ($post->tagsModel as $tag)
                                <a href="" class="inline-block px-3 h-6 bg-{{$tag->color_tag}}-600 text-white rounded-full">{{$tag->name_tag}}</a>
                            @endforeach
                        </div>
                        <h1 class="text-4xl text-white leading-8 font-bold">
                            <a href="{{route('posts.show', $post)}}">
                                {{$post->name_post}}
                            </a>
                        </h1>
                    </div>
                </article>
            @endforeach
        </div>

        {{-- Se crea el paginate --}}
        <div class="mt-4">
            {{$postsControl->links()}}
        </div>
    </div>
</x-app-layout>