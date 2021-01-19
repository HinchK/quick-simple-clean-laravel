@extends('backend.layouts.app')

@section('title', __('Dashboard'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Welcome :Name', ['name' => $logged_in_user->name])
        </x-slot>

        <x-slot name="body">
            @lang('Welcome to the Dashboard')
            <x-layouts.app>
                {{--  <h1 class="text-4xl text-center">ToDo List</h1>
                <section class="flex flex-col justify-center items-center">
                    <livewire:task-form></livewire:task-form>
                    <livewire:task-list></livewire:task-list>`
                </section>  --}}
            </x-layouts.app>
        </x-slot>
    </x-backend.card>
@endsection
