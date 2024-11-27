document.addEventListener('DOMContentLoaded', () => {
    // Create the custom cursor element
    const cursor = document.createElement('div');
    cursor.classList.add('custom-cursor');
    document.body.appendChild(cursor);

    // Update cursor position
    document.addEventListener('mousemove', (e) => {
        cursor.style.left = `${e.clientX}px`;
        cursor.style.top = `${e.clientY}px`;
    });

    // Add animation on mouse click
    document.addEventListener('click', () => {
        cursor.classList.add('animate');
        setTimeout(() => {
            cursor.classList.remove('animate');
        }, 300);
    });
});