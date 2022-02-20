<x-app-layout>
    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <h1 class="uppercase text-center text-3xl font-bold mb-4">Categoría: {{$category->name_category}}</h1>

        @foreach ($postsControlCat as $post)
            <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
                <img class="w-full h-72 object-cover object-center" src="{{Storage::url($post->imageModel->url)}}" alt="">
            
                <div class="px-6 py-4">
                    <h1 class="font-bold text-xl mb-2">
                        <a href="{{route('posts.show', $post)}}">{{$post->name_post}}</a>
                    </h1>
                    <div class="text-gray-700 text-base">
                        {{$post->extract}}
                    </div>
                </div>

                <div class="px-6 pt-4 pb-2">
                    @foreach ($post->tagsModel as $tag)
                        <a href="" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm text-gray-700 mr-2">{{$tag->name_tag}}</a>
                    @endforeach
                </div>
            </article>
        @endforeach

        <div class="mt-4">
            {{$postsControlCat->links()}}
        </div>
    </div>
</x-app-layout>