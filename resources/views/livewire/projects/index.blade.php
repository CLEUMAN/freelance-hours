<div class="grid grid-cols-2 gap-4">

    @foreach ($this->projects as $project)
        <div class="bg-[#10101E] divide-[#1E1E2C] divide-y p-[40px] rounded-[10px] border-[#1E1E2C] border']">
            <div class="text-center text-lg p-2">
                <a class="" href="{{ route('projects.show', $project) }}">
                    {{ $project->title }}
                </a>
            </div>

            <p class="py-2"> {{ $project->author->name }}</p>
            <p class="text-cyan-200 text-sm"> {{ $project->author->email }}</p>
        </div>
    @endforeach


</div>
