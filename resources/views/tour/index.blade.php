<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach ($tours as $tour)
            <div class="flex flex-col bg-white px-5 py-6 justify-between pb-6">
                <div class="flex justify-between">
                    <img src="{{ Vite::asset('resources/images/tour1.jpg') }}" alt="">
                    <p>{{ $tour->title }}</p>
                    <p>{{ $tour->date }}</p>
                    <p>{{ $tour->price }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>


<?php

use Carbon\Carbon;
