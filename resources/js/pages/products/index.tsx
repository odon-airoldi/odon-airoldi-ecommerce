import { Head, Link } from '@inertiajs/react';
import type { Product } from '@/types';
import { show } from '@/routes/products';

type Props = {
    products: Product[];
};

export default function Index({ products }: Props) {
    return (
        <>
            <Head title="Shop" />

            <ul>
                {products.map((product) => (
                    <li key={product.id}>
                        <Link href={show(product)}>{product.name}</Link>
                    </li>
                ))}
            </ul>
        </>
    );
}
