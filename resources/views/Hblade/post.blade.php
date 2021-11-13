<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('post') }}
        </h2>
    </x-slot>

    <div style="padding: 3%">
        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">글 제목</label>
                <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    name="title"
                    placeholder="글의 제목을 입력 하세요"></div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">글의 내용</label>
                    <textarea
                        class="form-control"
                        id="exampleFormControlTextarea1"
                        rows="5"
                        name="content"></textarea>
                </div>

                <!-- 파일 선택 -->
                <div class="mb-3">
                    <input class="form-control" type="file" name="image" id="formFile"></div>
                </div>
                <div class="" style="text-align:center;">
                    <button class="btn btn-primary" type="submit">글쓰기</button>

                </div>
            </form>
        </div>
    </x-app-layout>