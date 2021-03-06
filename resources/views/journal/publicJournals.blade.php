@extends('layouts.app')
<title>Public Journals</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="{{ URL::asset('css/journals.css') }}" rel="stylesheet">

@section('content')
    <div class="journals-container">
        @foreach ($journals as $journal)
            @can('viewPublic', $journal)
                <div class="journal-container">
                    <a class="book" href="/journal/{{ $journal->id }}">
                        <div class="front">
                            <div class="cover">
                                <div class="num-up">{{ $journal->title }}</div>
                                <div class="author">{{ $journal->getUser()->get()[0]->name }}</div>
                                <div class="year">- {{ $journal->year }}</div>
                            </div>
                        </div>
                    </a>
                </div>
            @endcan
        @endforeach
    </div>
    <div class="page-number-container">
        {{ $journals->links() }}
    </div>
    @can('isPublic')
        <div class="add-button-container">
            <a href="create-journal"><i class="fa fa-plus"></i></a>
        </div>
    @endcan}
@endsection
