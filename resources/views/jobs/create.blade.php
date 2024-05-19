<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input name="title" label="title" placeholder="CEO" />
        <x-forms.input name="salary" label="salary" placeholder="$90.000" />
        <x-forms.input name="location" label="Location" placeholder="Winter Park, Florida" />

        <x-forms.select label="Schedule" name="schedule">
            <option>Full Time</option>
            <option>Part Time</option>
        </x-forms.select>

        <x-forms.input name="url" label="URL" placeholder="https://www.acme.com/jobs/ceo-position" />

        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />
        
        <x-forms.divider />

        <x-forms.input name="tags" label="Tags (Comma seperated, optional)" placeholder="digital marketing, franchise, etc." />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>

</x-layout>