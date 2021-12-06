@auth
    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/comments">
            @csrf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/50?u={{ auth()->id() }}" alt="" width="50" height="50" class="rounded-full">
                <h2 class="ml-3">Leave a comment.</h2>
            </header>

            <div class="mt-7">
                                <textarea
                                    name="body"
                                    class="w-full text-sm focus:outline-none focus:ring"
                                    rows="7"
                                    placeholder="Quick, think of something to say!"
                                    required></textarea>

                @error('body')
                <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror

            </div>

            <div class="flex justify-end mt-7">
                <button type="submit" class="bg-blue-500 text-white uppercase font-semibold text-sm py-2 px-10 rounded-2xl hover:bg-blue-600">
                    Post
                </button>
            </div>

        </form>
    </x-panel>
@else
    <p>
        <a href="/login">Log in to leave a comment.</a>
    </p>
@endauth
