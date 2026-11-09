import { Head } from '@inertiajs/react';
import type { Product } from '@/types';

type Props = {
    products: Product[];
};

export default function Index({ products }: Props) {

    return (
        <>
            <Head title="Shop" />

            <ul>
                {products.map(product => (
                    <li key={product.id}>{product.name}</li>
                ))}
            </ul>

        </>
    )
}

