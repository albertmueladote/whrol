<template>
    <div class="background">
        <form
            action="/background_image_upload"
            class="dropzone"
            id="my-dropzone"
        >
            <div id="editor" ref="editor"></div>
            <div class="fallback">
                <input name="file" type="file" multiple />
            </div>
        </form>
    </div>
</template>
<script>
import Quill from "quill";
import "quill/dist/quill.snow.css";

import Dropzone from "dropzone";
import "dropzone/dist/dropzone.css";

Dropzone.autoDiscover = false;

export default {
    mounted() {
        this.initQuill();
        this.initDropzone();
    },
    methods: {
        initQuill() {
            this.quill = new Quill(this.$refs.editor, {
                theme: "snow",
            });
        },
        initDropzone() {
            new Dropzone("form.dropzone", {
                maxFiles: 3,
                removedfile: function (file) {
                    // Lógica para manejar la eliminación del archivo
                    // Puede incluir una llamada AJAX para eliminar el archivo del servidor
                    console.log(file);
                },
            });
        },
    },
};
</script>

<style lang="scss">
.background {
    position: absolute;
    width: 50%;
    left: 25%;
    z-index: 100;
    background-color: white;
    overflow: hidden; /* Ocultar el contenido que se extiende más allá de la altura */
    height: 0;
    transition: height 0.5s ease;
    &.visible {
        height: 75%; /* Mostrar completamente cuando la clase 'visible' está presente */
        box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.5);
        padding: 10px;
    }
    #editor {
        width: 100%;
        height: 65%;
    }
    form {
        margin-top: 50px;
        width: 100%;
        height: 25%;
    }
}
</style>
