import React from 'react';
import Layout from "@/Pages/Layout";
import {InertiaLink, Link} from '@inertiajs/inertia-react';
import route from 'ziggy-js';
import { Ziggy } from '../ziggy';


function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}
let mar = document.getElementsByTagName("body");
mar[0].addEventListener('keydown', (e) => {
    console.log(e.keyCode)
    if(e.keyCode == 37 || e.keyCode == 39){
        let random = getRandomColor()
        window.history.pushState({}, "", "/ok/" + random);
        document.getElementById("od").innerText = "#" + random;
        document.getElementById("sheet").style.backgroundColor = "#" + random;

    }
});


export default function AboutComponent(props) {
    console.log(props.colored);
    return (
        <Layout>
            <div id={"od"}>#{props.colored}</div>
            <div style={{position: 'fixed', height: '100%', width: '40%', left: '30%', backgroundColor: "#" + props.colored }} id={"sheet"}>s
            </div>
        </Layout>
    );
}
