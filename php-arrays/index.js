let items = ['A', 'B', 'C', 'D', 'E', 'F'];

function chunk(items, count) {

    return Array.from({length: Math.ceil(items.length / count)}, (val, index) => {
        return items.slice(index * count, index * count + count);
    });
    // return items.map((item, index) => {
    // return items.slice(index * count, index * count + count);
    // }).filter(item => item.length);
}


console.log(chunk(items, 2));