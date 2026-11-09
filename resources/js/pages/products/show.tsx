import { Head } from '@inertiajs/react';
import type { Product } from '@/types';

type Props = {
    product: Product;
};

export default function Show({ product }: Props) {
    return (
        <>
            <Head title={product.name} />

            <h1>{product.name}</h1>
        </>
    );
}
