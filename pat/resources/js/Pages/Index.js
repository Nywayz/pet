import React from 'react';
import Layout from "@/Pages/Layout";
import {InertiaLink, Link} from '@inertiajs/inertia-react';
import route from 'ziggy-js';
import { Ziggy } from '../ziggy';



export default function AboutComponent({$props}) {
    return (
        <Layout>
            <div>
                index {$props.oui} <br/>
            </div>
            <Link href={"/about"}>A propos</Link>
        </Layout>
    );
}
