export type ProductImage = {
    id: number;
    path: string;
    url: string;
    alt: string | null;
    position: number;
};

export type ProductVariant = {
    id: number;
    size: string | null;
    sku: string | null;
    stock: number;
};

export type Product = {
    id: number;
    name: string;
    slug: string;
    description: string;
    type: 'tee' | 'clay';
    price: number;
    images: ProductImage[];
    variants?: ProductVariant[];
}