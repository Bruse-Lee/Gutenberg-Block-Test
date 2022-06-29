(function (blocks, element, blockEditor) {
    var el = element.createElement;
    var useBlockProps = blockEditor.useBlockProps;

    blocks.registerBlockType('create-block/view-script-block', {
        title: 'View Script Block',
        icon: 'google', // The icon of block in editor.
        category: 'easeware-blocks', // The category of block in editor.
        edit: function () {
            return el(
                'p',
                useBlockProps(),
                'Hello from the editor',
            );
        },
        save: function () {
            return el(
                'p',
                useBlockProps.save(),
                'Hello from the frontend',
            );
        },
    });
})(
    window.wp.blocks,
    window.wp.element,
    window.wp.blockEditor
);