<div>
    @if(count($companies) > 0)
        <p>Yes</p>
    @else
        <div class="flex items-center justify-center rounded-xl border-2 border-dashed border-gray-200 bg-gray-50 py-32 text-gray-400 dark:border-gray-700 dark:bg-gray-800">
            Немає ніяких осіб
        </div>
    @endif
</div>
