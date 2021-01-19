// Configuración de conexión
const ipfs = window.IpfsHttpClient('ipfs.infura.io', '5001', {
    protocol: 'https'
});


$("#upload").on("change", function () {
    var fichero = new FileReader();

    fichero.onload = function (e) {

        const datos = buffer.Buffer(fichero.result);
        ipfs.add(datos, (err, result) => {
            console.log(err, result);

            let ipfsLink = `<video width="100%" height="300px" controls>
            <source src="https://gateway.ipfs.io/ipfs/${result[0].hash}" 
            preload="auto" controls poster="027-ejemplo-etiqueta-video-html5-poster.png" 
            type="video/mp4"> Your browser does not support the video tag.
            </video>${result[0].hash}`;
            document.getElementById("link").innerHTML = ipfsLink;

        })
    }
    fichero.readAsArrayBuffer(this.files[0]);
});