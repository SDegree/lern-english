@extends('partials.main')

@section('container')
    <div class="card mt-5 shadow">
        @foreach ($vocabularys as $voc)
            <div class="card-body">
                <div class="title d-flex justify-content-between">
                    <h5 class="card-title d-inline">{{ Request::is('/') ? 'Vocabulary' : 'Kosakata' }}</h5>
                    <a href="{{ Request::is('/') ? '/ind?page=1' : '/?page=1' }}"
                        class="d-inline text-end ">{{ Request::is('/') ? 'Indonesia' : 'English' }}</a>
                </div>
                <div class="contain d-flex justify-content-between align-items-center">
                    <div class="col">
                        <a {{ request('page') == 1 ? 'hidden' : '' }}
                            href="{{ Request::is('/') ? '/' : 'ind' }}?page={{ request('page') - 1 }}">
                            <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                            </svg></a>
                    </div>
                    <div class="col">
                        <h1 class="card-title text-center text-capitalize">
                            {{ Request::is('ind') ? $voc->kosakata : $voc->vocabulary }}
                        </h1>
                    </div>
                    <div class="col text-end">
                        <a {{ request('page') == $vocabularys->lastPage() ? 'hidden' : '' }}
                            href="{{ Request::is('/') ? '/' : 'ind' }}?page={{ request('page') + 1 }}">
                            <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                            </svg></a>
                    </div>
                </div>
                <div class="foother d-flex justify-content-between align-items-center">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Translate
                        </button>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item text-capitalize">
                                {{ Request::is('ind') ? $voc->english->vocabulary : $voc->indonesia->kosakata }}</li>
                        </ul>
                    </div>

                    <div class="retry text-primary" {{ request('page') == $vocabularys->lastPage() ? '' : 'hidden' }}>
                        <a href="{{ Request::is('/') ? '/?page=1' : '/ind?page=1' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z" />
                                <path
                                    d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z" />
                            </svg></a>
                    </div>
                </div>
            </div>
        @endforeach
        {{-- <div class="row justify-content-center">
            {{ $vocabularys->links() }}
        </div> --}}
    </div>
@endsection
