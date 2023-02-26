<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImportCSVRequest;
use App\Http\Resources\TestimonialCollection;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestimonialController extends Controller
{
    public function importCsv(ImportCSVRequest $request)
    {
        $file = $request->validated()["csv_file"];
        $handle = fopen($file, 'r');
        $header = fgetcsv($handle);

        while ($row = fgetcsv($handle)) {
            $data = array_combine($header, $row);

            // Insert the data into the database
            DB::table('testimonials')->insert([
                'Reviewer' => $data['Reviewer'],
                'Email' => $data['Email'],
                'Review' => $data['Review'],
                'Rating' => $data['Rating'],
                'Employee' => $data['Employee'],
                'Employees_position' => $data['Employees_position'],
                'Unique_employee_number' => $data['Unique_employee_number'],
                'Company' => $data['Company'],
                'Company description' => $data['Company description'],
            ]);
        }

        // Close the file handle
        fclose($handle);

        return redirect()->back()->with('success', 'CSV file imported successfully.');
    }

    public function index(Request $request)
    {
        $testimonials = Testimonial::paginate(15);
        return new TestimonialCollection($testimonials);

    }

    public function clear(Request $request) {
        Testimonial::truncate();
        return redirect()->back()->with('success', 'Testimonials cleared');
    }
}
