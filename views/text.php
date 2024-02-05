<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HTML Code Generation</title>
</head>
<body>
<textarea id="content" rows="10" cols="50"></textarea>
<div id="preview"></div>

<script>
const textarea = document.getElementById('content');
const preview = document.getElementById('preview');

textarea.addEventListener('input', function() {
    const content = textarea.value;
    const html = generateHTML(content);
    preview.innerHTML = html;
});

function generateHTML(text) {
    const lines = text.split('\n');
    let html = '';
    lines.forEach((line, index) => {
        if (line.trim() !== '') {
            if (line.startsWith('<p>') || line.startsWith('<ul>') || line.startsWith('<ol>')) {
                html += line + '\n';
            } else {
                html += `<p>${line}</p>\n`;
            }
        }
    });
    return html;
}
</script>
</body>
</html>
