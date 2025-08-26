import { Button } from '@/components/ui/button';
import { Card, CardContent, CardHeader, CardTitle } from '@/components/ui/card';
import { CustomTextarea } from '@/components/ui/custom-textarea';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { PlaceholderPattern } from '@/components/ui/placeholder-pattern';
import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, useForm } from '@inertiajs/react';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: route('dashboard'),
    },
    {
        title: 'Recioes',
        href: route('recipes.index'),
    },
    {
        title: 'Create recioes',
        href: route('recipes.create'),
    },
];

export default function Create() {



    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Create recipe" />
            <div className="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
                <div className="ml-auto">
                    <Link className="w-fit text-md bg-indigo-800 px-4 py-2 rounded-lg text-white hover:opacity-90" as="button" href={route('recipes.index')}>
                        Back
                    </Link>
                </div>
                <Card>
                    <CardHeader>
                        <CardTitle>
                            Create Recipe
                        </CardTitle>
                    </CardHeader>
                    <CardContent>
                        <form className="flex flex-col gap-4" autoComplete='off'>
                            <div className="grid gap-6">
                                <div className="grid gap-2">
                                    <Label htmlFor="title">Title</Label>
                                    <Input id="title" name="title" type="text" placeholder="Recipe title" autoFocus tabIndex={1} />
                                </div>
                                <div className="grid gap-2">
                                    <Label htmlFor="description">Description</Label>
                                    <CustomTextarea id="description" name="description" placeholder="Recipe description" tabIndex={2} rows={4} />
                                </div>
                                <div className="grid gap-2">
                                    <Label htmlFor="url">Possible source</Label>
                                    <Input id="url" name="url" type="text" placeholder="Possible source" autoFocus tabIndex={3} />
                                </div>
                                <div className="grid gap-2">
                                    <Label htmlFor="image">Image</Label>
                                    <Input id="image" name="image" type="file" autoFocus tabIndex={4} />
                                </div>
                                <Button type="submit" className="mt-4 w-fit curser-pointer" tabIndex={5}>Save</Button>
                            </div>
                        </form>
                    </CardContent>
                </Card>
            </div>
        </AppLayout>
    );
}
