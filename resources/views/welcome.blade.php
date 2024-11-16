<x-layout>
    <div class="space-y-16">
        <section class="text-center">
            <h1 class="font-semibold text-4xl mb-6">Let's Find Your Next Job</h1>

            <form action="" class="border-none">
                <input type="text" placeholder="I'm looking for..." class="rounded-full bg-white/5 border border-white/10 px-8 py-4 w-full max-w-xl outline-none hover:border-blue-400  focus-visible:border-blue-400">
            </form>
        </section>

        <section>
            <x-section-heading>Top Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8">
                <x-job-card/>
                <x-job-card/>
                <x-job-card/>
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="space-x-1">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="space-y-8">
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
            </div>
        </section>
    </div>
</x-layout>
