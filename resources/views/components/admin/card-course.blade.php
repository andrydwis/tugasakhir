<!-- start card -->
<div class="w-full px-2 py-4 mx-auto report-card md:w-1/2 2xl:w-1/3">
    <div class="h-full px-5 pt-8 pb-5 bg-white border border-gray-200 rounded-md shadow card ">
        <div class="flex flex-col">
            <!-- bagian atas -->
            <div class="flex justify-end text-gray-400 " x-data="{detailOpen : false}">
                <button @click="detailOpen = true" class="focus:outline-none hover:text-gray-800">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                    </svg>
                </button>

                <div x-cloak x-show.transition.origin.top="detailOpen" @click.away="detailOpen = false" class="absolute z-50 w-40 py-2 mt-5 ml-10 text-left text-gray-500 bg-white border border-gray-300 rounded shadow-md">
                    <!-- item -->
                    <a href="#" class="block px-4 py-2 text-sm font-medium tracking-wide capitalize transition-all duration-300 ease-in-out bg-white hover:bg-gray-200 hover:text-gray-900" href="#">
                        <i class="mr-1 text-xs fas fa-info"></i>
                        Detail
                    </a>
                    <!-- end item -->

                    <!-- item -->
                    <a href="{{route('admin.course.edit', $courseId)}}" class="block px-4 py-2 text-sm font-medium tracking-wide capitalize transition-all duration-300 ease-in-out bg-white hover:bg-gray-200 hover:text-gray-900" href="#">
                        <i class="mr-1 text-xs fas fa-edit"></i>
                        Edit
                    </a>
                    <!-- end item -->

                    <!-- item -->

                    <!-- form di hidden -->
                    <div x-data>
                        <form action="{{route('admin.course.destroy', $courseId)}}" method="post" class="hidden">
                            @csrf
                            @method('DELETE')
                            <button id="{{ $judul }}" type="submit">
                                Hapus
                            </button>

                        </form>

                        <a href="#" @click.prevent="$('#{{ $judul }}').click();" class="block px-4 py-2 text-sm font-medium tracking-wide capitalize transition-all duration-300 ease-in-out bg-white hover:bg-gray-200 hover:text-gray-900">
                            <i class="mr-1 text-xs fas fa-trash"></i>
                            Hapus
                        </a>
                    </div>
                    <!-- end item -->
                </div>

            </div>
            <div class="flex flex-col items-center md:flex-row md:items-start">
                <img src=" {{$thumbnail}} " alt="missing img" class="object-cover w-20 h-20 rounded-full" />

                <!-- jika image kosong pake gambar dibawah -->

                <!-- <img src="https://media.istockphoto.com/vectors/no-image-vector-symbol-missing-available-icon-no-gallery-for-this-vector-id1128826884?k=6&m=1128826884&s=170667a&w=0&h=F6kUwTcsLXUojmGFxN2wApEKgjx63zcIshCSOmnfEFs=" alt="missing img" class="object-cover w-20 h-20 rounded-full" /> -->

                <div class="flex flex-col items-start pl-5">
                    <h3 class="text-xl font-semibold hover:text-blue-600">
                        <a href="{{route('admin.course.edit', $courseId)}}">{{ $judul }}</a>
                    </h3>
                    <!-- kalo bisa mending get tanggal dibuat -->
                    <!-- <span class="text-sm tracking-tight text-gray-500">Dibuat pada : 12 Oktober 2020</span> -->
                    <span class="text-sm tracking-tight text-gray-500"> {{ $level }} </span>
                    <div class="flex flex-wrap gap-1 mt-1">
                        <!-- bikin perulangan disini -->
                        @foreach($tags as $tag)
                        <span class="px-2 py-1 text-xs tracking-tight text-gray-100 bg-blue-400 rounded-full"> {{ $tag->name }} </span>
                        @endforeach
                        <!-- bikin perulangan disini -->
                    </div>
                </div>
            </div>
            <!-- end of bagian atas -->

            <!-- bagian bawah -->
            <div class="flex pt-5 text-center">
                <!-- kiri -->
                <div class="flex items-center justify-center flex-1 gap-1 px-1 text-gray-700 border-r-2">
                    <svg class="w-14 h-14" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                    </svg>
                    <div class="flex flex-col items-start">
                        <h3 class="text-xl font-bold md:text-2xl xl:text-3xl">31</h3>
                        <span class="text-xs tracking-tight text-gray-500 md:text-sm"><span class="hidden sm:inline">Total</span> Murid</span>
                    </div>
                </div>

                <!-- kanan -->
                <div class="flex items-center justify-center flex-1 gap-1 px-1 text-gray-700">
                    <svg class="w-14 h-14" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                        <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <div class="flex flex-col items-start">
                        <h3 class="text-xl font-bold md:text-2xl xl:text-3xl">11</h3>
                        <span class="text-xs tracking-tight text-gray-500 md:text-sm"> Submission</span>
                    </div>
                </div>

            </div>
            <!-- end of bagian bawah -->
        </div>
    </div>
</div>
<!-- end card -->