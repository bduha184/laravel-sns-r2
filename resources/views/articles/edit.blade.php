<x-app>
    <x-slot name="title">記事更新</x-slot>
    @include('nav')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-body pt-0">
                        @include('error_card_list')
                        <div class="card-text">
                            <form method="POST" action="{{ route('articles.update', compact('article')) }}">
                                @method('PATCH')
                                @include('articles.form')
                                <button type="submit" class="btn blue-gradient btn-block">更新する</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
