<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $front = new Type();
        $front->name = "Front-end";
        $front->icon = "fa-solid fa-laptop-code";
        $front->description = "Front-end web development is the development of the graphical user interface of a website through the use of HTML, CSS, and JavaScript so users can view and interact with that website.";
        $front->save();
        
        $back = new Type();
        $back->name = "Back-end";
        $back->icon = "fa-solid fa-server";
        $back->description = "The backend (or “server side”) is the portion of the website you don’t see. It’s responsible for storing and organizing data, and ensuring everything on the client-side actually works.;";
        $back->save();
        
        $fullStack = new Type();
        $fullStack->name = "Full-Stack";
        $fullStack->icon = "fa-solid fa-sitemap";
        $fullStack->description = "Full stack development is the process of developing both the frontend and backend of applications. Any application has a frontend (user-facing) component and a backend (database and logic) component.";
        $fullStack->save();
        
        $design = new Type();
        $design->name = "Design";
        $design->icon = "fa-solid fa-palette";
        $design->description = "Design defines a website’s colors, layout, font, and images—all the stuff that goes into a website’s branding and usability—and requires tools like Photoshop, Illustrator, Fireworks, and Sketch";
        $design->save();
    }
}
