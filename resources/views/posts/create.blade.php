<x-layout>
    <section class="py-8 max-w-md mx-auto">

        <h1 class="text-lg font-bold mb-4">
            Publish New Post
        </h1>

        <x-panel>
        <form method="POST" action="/admin/posts" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="title"
                >
                    Title
                </label>

                <input class="border border-gray-400 p-2 w-full"
                       type="text"
                       name="title"
                       id="title"
                       value="{{ old('title') }}"
                       required
                >

                @error('title')
                <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="slug"
                >
                    Slug
                </label>

                <input class="border border-gray-400 p-2 w-full"
                       type="text"
                       name="slug"
                       id="slug"
                       value="{{ old('slug') }}"
                       required
                >

                @error('slug')
                <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>

{{--            <div class="mb-6">--}}
{{--                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"--}}
{{--                       for="thumbnail"--}}
{{--                >--}}
{{--                    Thumbnail--}}
{{--                </label>--}}

{{--                <input class="border border-gray-400 p-2 w-full"--}}
{{--                       type="file"--}}
{{--                       name="thumbnail"--}}
{{--                       id="thumbnail"--}}
{{--                       required--}}
{{--                >--}}
{{--                @error('thumbnail')--}}
{{--                <span class="text-xs text-red-500">{{ $message }}</span>--}}
{{--                @enderror--}}
{{--            </div>--}}

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="excerpt"
                >
                Excerpt
                </label>

                <textarea class="border border-gray-400 p-2 w-full"
                    name="excerpt"
                    id="excerpt"
                    required
                >{{ old('excerpt') }}</textarea>

                @error('excerpt')
                <span class="text-xs text-red-500 mt-2">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="body"
                >
                    Body
                </label>

                <textarea class="border border-gray-400 p-2 w-full"
                          name="body"
                          id="body"
                          required
                >{{ old('body') }}</textarea>

                @error('body')
                <span class="text-xs text-red-500 mt-2">{{ $message }}</span>
                @enderror

                </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="category_id"
                >
                    Category
                </label>

                <select name="category_id" id="category_id">

                    @foreach (\App\Models\Category::all() as $category)
                        <option
                            value="{{ $category->id }}"
                            {{ old('category_id') == $category->id ? 'selected' : '' }}
                        >{{ ucwords($category->name) }}</option>
                    @endforeach

                </select>

                @error('category')
                <span class="text-xs text-red-500 mt-2">{{ $message }}</span>
                @enderror

            </div>

                <button type="submit"
                        class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                >
                    Publish
                </button>

        </form>
        </x-panel>
    </section>
</x-layout>
