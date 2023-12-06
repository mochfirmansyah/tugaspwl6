@props([
    'header => '',
    ])

    <div class="flex flex-col">
           <div class="-m-1.5 overflow-x-auto">
         <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200
                dark:divide-gray-700">
                <thead>
                    <tr>
                        {{ $header}}
</tr>
</thead>
<t body>
    {{ $slot}}
</tbody>
</table>
</div>
</div>
</div>
</div>

<script>

    document.querySelectorALL('th').forEach(el,classList.add("px-6", "py-3", "text-left", "text-XS", "font-medium", "text-gray-800", "dark:text-gray-200"));
    </script>    
