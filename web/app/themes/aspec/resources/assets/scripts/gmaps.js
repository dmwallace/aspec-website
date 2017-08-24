import $script from 'scriptjs';

let isLoading = false;

const load = (apiKey) => {

    return new Promise((resolve) => {
        if (window.google && window.google.maps) {
            console.log("resolving immediate...");
            resolve(window.google.maps);
        } else {
            if (isLoading) {
                setTimeout(() => {
                    console.log("waiting...");
                    resolve(load(apiKey));
                }, 100);
            } else {
                const apiUrl = `https://maps.googleapis.com/maps/api/js?key=${apiKey}&libraries=places`;
                console.log("loading...");
                isLoading = true;

                $script(apiUrl, 'google-maps', () => {
                    isLoading = false;
                    console.log("resolving...");
                    resolve(window.google.maps);
                });
            }
        }

    })
};

export default load;
