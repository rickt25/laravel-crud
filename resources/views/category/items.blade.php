<tr class="bg-white border-b border-gray-200">
  <td class="px-4 py-3">{{ $loop->iteration + $categories->firstItem() - 1 }}</td>
  <td class="px-4 py-3">{{ $category->name }}</td>
  <td class="px-4 py-3 w-px whitespace-nowrap">
    <x-action :id="$category->id" route="category" />
  </td>
</tr>