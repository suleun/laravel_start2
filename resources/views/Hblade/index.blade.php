<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('index') }}
        </h2>
    </x-slot>

    <div style="padding: 3%">

        <div>
            <div class="form-row float-right">
                <button
                    class="btn btn-warning"
                    type="button"
                    onclick="location.href='{{ route('post.create') }}'">
    
                    글쓰기
    
                </button>
            </div>
    
        </div>
        
        <div class="card-header">
            글 목록 보기

        </div>

        @foreach ($posts as $post)
        {{-- 첫번째 posts는 내가 받아오는 변수, 두번째 post는 밑에서 이 변수를 이 이름으로 쓰겠다 --}}
        <div class="card">
            <div class="card-body">
                <a href="{{ route('post.show', ['id' => $post->id]) }}">{{ $post->title }}</a>

                <div class="form-row float-right">
                    {{ $post->created_at }}
                </div>

            </div>
        </div>
        @endforeach

    </div>

    {{ $posts->links() }}

</x-app-layout>