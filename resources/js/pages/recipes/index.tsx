import { PlaceholderPattern } from '@/components/ui/placeholder-pattern';
import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem } from '@/types';
import { Head, Link } from '@inertiajs/react';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: route('dashboard'),
    },
    {
        title: 'Recioes',
        href: route('recipes.index'),
    },
];

export default function Index() {
    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Recipes" />
            <div className="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
                <div className="ml-auto">
                    <Link className="bg-indigo-800 px-4 py-2 rounded-lg text-white text-md couser-pointer hover:opacity-90" as="button" href={route('recipes.create')}>Add Recipe</Link>
                </div>
                <div className="overflow-hidden rounded-lg border bg-white shadow-sm">
                    <table className="w-full table-auto">
                        <thead>
                            <tr className='bg-gray-700 text-white'>
                                <th className="p-4 border">
                                    Title
                                </th>
                                <th className="p-4 border">
                                    Description
                                </th>
                                <th className="p-4 border">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td className="border px-4 py-2 text-center">
                                    test
                                </td>
                                <td className="border px-4 py-2 text-center">
                                    test
                                </td>
                                <td className="border px-4 py-2 text-center">
                                    test
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </AppLayout>
    );
}
