<form action="/calc" method="POST" class="flex flex-col justify-start items-start gap-4">
    @csrf
    <div class="flex flex-row gap-4">
        <label for="a" class="text-white font-TechReg text-xl font-semibold">Coefficient a:</label>
        <input type="number" id="a" name="a" required class="bg-indigo-950 text-white border border-gray-500 px-2 py-1">
    </div>
    <div class="flex flex-row gap-4">
        <label for="b" class="text-white font-TechReg text-xl font-semibold">Coefficient b:</label>
        <input type="number" id="b" name="b" required class="bg-indigo-950 text-white border border-gray-500 px-2 py-1">
    </div>
    <div class="flex flex-row gap-4">
        <label for="c" class="text-white font-TechReg text-xl font-semibold">Coefficient c:</label>
        <input type="number" id="c" name="c" required class="bg-indigo-950 text-white border border-gray-500 px-2 py-1">
    </div>
    <button type="submit" class="text-blue-600 text-xl font-bold px-5 py-2 bg-gray-200 rounded-md">Посчитать</button>
</form>
