<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Company Details Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <div class="p-5 shadow row justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-4">Company Details Form</h2>
                <form action="{{ route('storeCompanyDetails') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="name">Company Name:</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" value="{{ old('name') }}" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="about_us">About Us:</label>
                        <textarea class="form-control @error('about_us') is-invalid @enderror" id="about_us" name="about_us" rows="3"
                            required>{{ old('about_us') }}</textarea>
                        @error('about_us')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="industry">Industry:</label>
                        <input type="text" class="form-control @error('industry') is-invalid @enderror"
                            id="industry" name="industry" value="{{ old('industry') }}" required>
                        @error('industry')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="sector">Sector:</label>
                        <input type="text" class="form-control @error('sector') is-invalid @enderror" id="sector"
                            name="sector" value="{{ old('sector') }}" required>
                        @error('sector')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="location">Location:</label>
                        <input type="text" class="form-control @error('location') is-invalid @enderror"
                            id="location" name="location" value="{{ old('location') }}" required>
                        @error('location')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="contact_email">Contact Email:</label>
                        <input type="email" class="form-control @error('contact_email') is-invalid @enderror"
                            id="contact_email" name="contact_email" value="{{ old('contact_email') }}" required>
                        @error('contact_email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="contact_phone">Contact Phone:</label>
                        <input type="tel" class="form-control @error('contact_phone') is-invalid @enderror"
                            id="contact_phone" name="contact_phone" value="{{ old('contact_phone') }}" required>
                        @error('contact_phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="website">Website:</label>
                        <input type="url" class="form-control @error('website') is-invalid @enderror" id="website"
                            name="website" value="{{ old('website') }}">
                        @error('website')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="employee_count">Employee Count:</label>
                        <input type="number" class="form-control @error('employee_count') is-invalid @enderror"
                            id="employee_count" name="employee_count" value="{{ old('employee_count') }}" required>
                        @error('employee_count')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="company_type">Company Type:</label>
                        <select class="form-control @error('company_type') is-invalid @enderror" id="company_type"
                            name="company_type" required>
                            <option value="startup" {{ old('company_type') == 'startup' ? 'selected' : '' }}>Startup
                            </option>
                            <option value="small_business"
                                {{ old('company_type') == 'small_business' ? 'selected' : '' }}>Small Business</option>
                            <option value="medium_enterprise"
                                {{ old('company_type') == 'medium_enterprise' ? 'selected' : '' }}>Medium Enterprise
                            </option>
                            <option value="large_corporation"
                                {{ old('company_type') == 'large_corporation' ? 'selected' : '' }}>Large Corporation
                            </option>
                        </select>
                        @error('company_type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="founded_year">Founded Year:</label>
                        <input type="number" class="form-control @error('founded_year') is-invalid @enderror"
                            id="founded_year" name="founded_year" value="{{ old('founded_year') }}" required>
                        @error('founded_year')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>



                    <div class="form-group">
                        <label for="current_job_openings">Current Job Openings:</label>
                        <input type="number"
                            class="form-control @error('current_job_openings') is-invalid @enderror"
                            id="current_job_openings" name="current_job_openings"
                            value="{{ old('current_job_openings') }}" required>
                        @error('current_job_openings')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="selected_employers">Selected Employers:</label>
                        <input type="number" class="form-control @error('selected_employers') is-invalid @enderror"
                            id="selected_employers" name="selected_employers"
                            value="{{ old('selected_employers') }}" required>
                        @error('selected_employers')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="reviews">Reviews:</label>
                        <textarea class="form-control @error('reviews') is-invalid @enderror" id="reviews" name="reviews" rows="3">{{ old('reviews') }}</textarea>
                        @error('reviews')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="benefits">Benefits:</label>
                        <textarea class="form-control @error('benefits') is-invalid @enderror" id="benefits" name="benefits"
                            rows="3">{{ old('benefits') }}</textarea>
                        @error('benefits')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
