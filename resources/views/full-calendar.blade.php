<x-app-layout>
    @vite('resources/js/calendar.js')

    <!-- モーダルエリアここから -->
    <section>
        <div id="modal-id"
            class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center">
            <div class="relative min-w-md my-6 mx-auto max-w-2xl w-full sm:w-1/2">
                <!--content-->
                <div
                    class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                    <!--body-->
                    <form action="" method="POST" id="modal-form" class="relative p-6 flex-auto">
                        <input type="hidden" name="id" id="id">
                        <div class="my-4 text-slate-500 text-lg leading-relaxed">
                            <label for="all_day">{{ __('AllDay') }}</label>
                            <input type="checkbox" name="all_day" id="all_day">
                        </div>
                        <div class="my-4 text-slate-500 text-lg leading-relaxed">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="start_date">
                                {{ __('Event Start') }}
                            </label>
                            <input type="date" name="start_date" id="start_date" required
                                class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <input type="time" name="start_time" id="start_date"
                                class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="my-4 text-slate-500 text-lg leading-relaxed">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="end_date">
                                {{ __('Event End') }}
                            </label>
                            <input type="date" name="end_date" id="end_date" required
                                class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <input type="time" name="end_time" id="end_date"
                                class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="my-4 text-slate-500 text-lg leading-relaxed">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                                {{ __('Event Name') }}
                            </label>
                            <input type="text" name="title" id="title" required placeholder="予定名"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="my-4 text-slate-500 text-lg leading-relaxed mb-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="body">
                                {{ __('Description') }}
                            </label>
                            <textarea name="body" id="body" placeholder="{{ __('Description') }}" required
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline h-32"></textarea>
                        </div>
                    </form>
                    <!--footer-->
                    <div class="flex items-center justify-between p-6 border-t border-solid border-slate-200 rounded-b">
                        <button type="button" id="add-button"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            {{ __('Create') }}
                        </button>
                        <button type="button" id="update-button"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            {{ __('Update') }}
                        </button>
                        <button type="button" id="cancel-button"
                            class="bg-gray-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            {{ __('Cancel') }}
                        </button>
                        <button type="button" id="delete-button"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            {{ __('Delete') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal-id-bg" class="hidden opacity-25 fixed inset-0 z-40 bg-black"></div>
    </section>
    <!-- モーダルエリアここまで -->

    <div id="calendar" class="my-10"></div>
</x-app-layout>
