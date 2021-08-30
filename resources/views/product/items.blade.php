<tr class="bg-white border-b border-gray-200">
  <td class="px-4 py-3">{{ $loop->iteration + $products->firstItem() - 1 }}</td>
  <td class="px-4 py-3">{{ $product->name }}</td>
  <td class="px-4 py-3">{{ $product->category ? $product->category->name : '' }}</td>
  <td class="px-4 py-3 w-px whitespace-nowrap">
    <x-action :id="$product->id" route="product" />
  </td>
</tr>