<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('edit') }}
        </h2>
    </x-slot>

    <div style="padding: 3%">
        <form
            action="{{ route('post.update', ['id'=> $post->id]) }}"
            method="post"
            enctype="multipart/form-data">
            @csrf @method('patch')
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">글 제목</label>
                <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    name="title"
                    value="{{ $post->title }}"
                    placeholder="글의 제목을 입력 하세요"></div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">글의 내용</label>
                    <textarea
                        class="form-control"
                        id="exampleFormControlTextarea1"
                        rows="5"
                        name="content">{{ $post->content }}</textarea>
                </div>

                <!-- 파일 선택 -->
                <div class="mb-3">
                    <input class="form-control" type="file" name="image" id="formFile"></div>
                </div>

                @if($post->image)
                <div class="flex">

                    <img class="card-img-top" src="{{'/storage/image/'.$post->image }}"></div>
                    @else
                    <span>
                        <img style="width: 30%" src="{{ '/storage/image/noImage.png'}}"></div>
                    </span>
                    @endif

                    <div class="d-grid d-md-flex justify-content-md-end">
                        <button class="btn btn-primary me-md-2 text-white" type="submit">저장하기</button>

                    </div>
                </form>

            </x-app-layout>