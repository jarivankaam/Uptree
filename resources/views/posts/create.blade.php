@extends("layouts.dashboard")

@section("content")


    <form method="POST" action="{{ route('posts.store') }}" class="mr-auto ml-auto w-3/4 p-6 rounded-lg shadow-md text-left">
        @csrf
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        <div class="mb-4">
            <label class="block font-bold mb-2" for="message">
                Message
            </label>
            <textarea
                class="appearance-none bg-transparent border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline @error('message') border-red-500 @enderror"
                id="message"
                name="message"
                rows="5"
                placeholder="Enter your message here"
                required
            ></textarea>
            @error('message')
            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex items-center justify-between">
            <button class="inline-block px-6 py-3 bg-blue-600 text-white rounded hover:bg-blue-700 transition duration-200" type="submit">
                Save
            </button>
        </div>
    </form>





@endsection
