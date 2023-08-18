@extends('layouts.app')

@section('title', 'Create')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center my-4">Edit Channel</h1>
                <form action="{{ route('channel.update', $channel) }}" method="post">
                    @csrf
                    @method('put')
                    {{-- Form control here --}}
                    <div class="mb-3">
                        <label for="ChannelName" class="form-label">Name</label>
                        <input type="text" name="ChannelName" id="ChannelName" class="form-control" placeholder=""
                            value="{{ $channel->ChannelName }}" aria-describedby="helpId">

                    </div>
                    <div class="mb-3">
                        <label for="Description" class="form-label">Description</label>
                        <textarea class="form-control" name="Description" id="Description" rows="3">{{ $channel->Description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="SubscribersCount" class="form-label">Subscribers</label>
                        <input type="text" name="SubscribersCount" id="SubscribersCount" class="form-control"
                            placeholder="" aria-describedby="helpId" value="{{ $channel->SubscribersCount }}">

                    </div>
                    <div class="mb-3">
                        <label for="URL" class="form-label">URL</label>
                        <input type="text" name="URL" id="URL" class="form-control" placeholder=""
                            aria-describedby="helpId" value="{{ $channel->URL }}">

                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <button type="submit" class="btn btn-primary" class="d-flex mx-auto">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
