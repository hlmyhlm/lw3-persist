<div
    class="absolute bottom-0 right-12 h-60 w-60"
>
    <div class="w-full h-full bg-white border rounded overflow-auto flex flex-col">
        <div
            x-ref="chatBox"
            class="flex-1 p-4 text-sm flex flex-col gap-y-1">
            <div class="text-gray-400 italic">Chat history</div>
            @foreach($messages as $message)
                <div><span class="text-blue-400">You:</span> {{ $message }}</div>
            @endforeach
        </div>
        <div>
            <form
                wire:submit="addMessage"
                action="#"
                method="post"
            >
                <input wire:model="message" x-ref="messageInput" type="text" name="message" id="message" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </form>
        </div>
    </div>
</div>
