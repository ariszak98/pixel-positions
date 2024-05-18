<x-layout>
    <div class="space-y-10">

        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl pb-3">Let's Find Your Next Job</h1>
            <x-forms.form action="/search">
                <x-forms.input autofocus :label="false" name="q" placeholder="Web Developer" value="{{ $query }}" />
            </x-forms.form>
        </section>

        <section>
            <x-section-heading>Results</x-section-heading>
            <div class="space-y-6 mt-3">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>
        </section>
        
    </div>
</x-layout>