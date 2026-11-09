import { Head } from '@inertiajs/react';
import type { Product } from '@/types';

type Props = {
    product: Product;
};

export default function Show({ product }: Props) {
    console.log(product);

    return (
        <>
            <Head title={product.name} />

            <h1>{product.name}</h1>
            <p>{product.description}</p>
            <ul>
                <li>{product.price / 100} €</li>
            </ul>
            <div>
                {product.images.map((image) => (
                    <img key={image.id} src={image.url} />
                ))}
            </div>
        </>
    );
}
