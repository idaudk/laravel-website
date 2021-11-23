@extends('layouts.default')

@section('page-content')

    <section class="py-20 min-h-screen flex items-center">
        <div class="max-w-screen-lg mx-auto">
            <h2 class="text-4xl sm:text-6xl text-center mb-6">About</h2>
            <h3 class="tetxt-xl text-center text-gray-200 mb-6">Who is Daud K?</h3>
            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus ipsa est provident maiores autem voluptatem quisquam reprehenderit inventore adipisci? Doloremque perferendis quia dolore sit placeat dolorem ex! Iste deserunt dolorem natus nemo sed? Beatae reprehenderit distinctio veritatis modi eveniet officiis vitae voluptate fugit inventore nihil consequuntur doloribus nulla eligendi explicabo soluta, repellat sit cumque neque architecto deserunt quaerat perferendis suscipit numquam enim. Fugit obcaecati quos amet voluptatum expedita mollitia voluptatem ipsum soluta pariatur officia sequi quidem maiores aperiam, eligendi ab cumque, dignissimos maxime suscipit. Rerum nobis repudiandae animi at voluptas, fuga earum mollitia recusandae nihil corporis aspernatur aliquid nam dolorum!</p>
            <p class="mb-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam aspernatur suscipit, accusamus et at saepe perferendis possimus voluptatem commodi obcaecati?
            </p>
            <div class="mb-6">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente, explicabo laboriosam aliquid commodi cupiditate fugiat atque doloremque quos deleniti unde natus vero. Laboriosam, corrupti? Autem corporis quis doloribus quod vero similique architecto, perspiciatis, voluptatibus earum eum placeat cumque! Hic dolorum delectus commodi praesentium non in, nesciunt error illum exercitationem repellat!
            </div>
            <div class="text-center">
                <a href="{{ route('home') }}" class="inline-block px-4 py-2 rounded bg-pink-500 hover:bg-purple-500 transition">Go Home</a>
            </div>
        </div>
    </section>
    
@endsection