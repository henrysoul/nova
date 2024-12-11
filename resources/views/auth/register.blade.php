{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/signup.css') }}">
</head>

<body>
    @include('includes.header')
    <div class="signup">
        <h2>Sign up</h2>
        @include('includes.alerts')
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label for ="name">Name: </label>
            <input type="name" id="name" name="name" value="{{ old('name') }}" required autofocus
                placeholder="Enter your full name">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                autocomplete="username" placeholder="Enter your email">
            <label for="password">Password:</label>
            <input type="password" name="password" required autocomplete="new-password" id="password" name="password"
                required placeholder="Enter your password">
            <label for="password">Confirm Password:</label>
            <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
                required autocomplete="new-password" required placeholder="Enter your password">
            <button type="submit">Sign up</button>
        </form>
        <a class="login" href="{{ route('login') }}">Have an account?</a>
    </div>
    <div class="app">
        <div class="tag-list">
            <div class="loop-slider" style="--duration:19046ms; --direction:normal;">
                <div class="inner">
                    <div class="tag"><span>#</span> NOVA</div>
                    <div class="tag"><span>#</span> Biomechanic</div>
                    <div class="tag"><span>#</span> Algorithim</div>
                    <div class="tag"><span>#</span>AI</div>
                    <div class="tag"><span>#</span>Future</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <!-- duplicated content -->
                    <div class="tag"><span>#</span> Kinematics</div>
                    <div class="tag"><span>#</span> Inertia</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <div class="tag"><span>#</span> NOVA</div>
                    <div class="tag"><span>#</span> Power</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <div class="tag"><span>#</span> Acceleration</div>
                    <div class="tag"><span>#</span> Angular Velocity</div>
                    <div class="tag"><span>#</span> NOVA</div>
                    <div class="tag"><span>#</span> Biomechanic</div>
                    <div class="tag"><span>#</span> Algorithim</div>
                    <div class="tag"><span>#</span>AI</div>
                    <div class="tag"><span>#</span>Future</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <!-- duplicated content -->
                    <div class="tag"><span>#</span> Kinematics</div>
                    <div class="tag"><span>#</span> Inertia</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <div class="tag"><span>#</span> NOVA</div>
                    <div class="tag"><span>#</span> Power</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <div class="tag"><span>#</span> Acceleration</div>
                    <div class="tag"><span>#</span> Angular Velocity</div>

                </div>
            </div>
            <div class="loop-slider" style="--duration:24116ms; --direction:reverse;">
                <div class="inner">
                    <div class="tag"><span>#</span> Superset</div>
                    <div class="tag"><span>#</span> Biomechanical Efficiency</div>
                    <div class="tag"><span>#</span> Kinematics</div>
                    <div class="tag"><span>#</span> Isometric Contraction </div>
                    <div class="tag"><span>#</span> Explosiveness</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <div class="tag"><span>#</span> Acceleration</div>
                    <div class="tag"><span>#</span> Angular Velocity</div>
                    <!-- duplicated content -->
                    <div class="tag"><span>#</span> Strength</div>
                    <div class="tag"><span>#</span> Circuit Training</div>
                    <div class="tag"><span>#</span> Moment Arm</div>
                    <div class="tag"><span>#</span> Inertia</div>
                    <div class="tag"><span>#</span> Torque</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <div class="tag"><span>#</span> Moment Arm</div>
                    <div class="tag"><span>#</span> Inertia</div>
                    <div class="tag"><span>#</span> Torque</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <div class="tag"><span>#</span> Inertia</div>
                    <div class="tag"><span>#</span> Torque</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <div class="tag"><span>#</span> Moment Arm</div>
                    <div class="tag"><span>#</span> Inertia</div>
                    <div class="tag"><span>#</span> Torque</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                </div>
            </div>
            <div class="loop-slider" style="--duration:24603ms; --direction:normal;">
                <div class="inner">
                    <div class="tag"><span>#</span> Balance</div>
                    <div class="tag"><span>#</span> Tailwind</div>
                    <div class="tag"><span>#</span> Plyometrics</div>
                    <div class="tag"><span>#</span> Acceleration</div>
                    <div class="tag"><span>#</span> NOVA</div>
                    <!-- duplicated content -->
                    <div class="tag"><span>#</span> Angular Velocity</div>
                    <div class="tag"><span>#</span> GAIT</div>
                    <div class="tag"><span>#</span> Reaction</div>
                    <div class="tag"><span>#</span> Inertia</div>
                    <div class="tag"><span>#</span> Patterning</div>
                    <div class="tag"><span>#</span> Balance</div>
                    <div class="tag"><span>#</span> Tailwind</div>
                    <div class="tag"><span>#</span> Plyometrics</div>
                    <div class="tag"><span>#</span> Acceleration</div>
                    <div class="tag"><span>#</span> NOVA</div>
                    <!-- duplicated content -->
                    <div class="tag"><span>#</span> Angular Velocity</div>
                    <div class="tag"><span>#</span> GAIT</div>
                    <div class="tag"><span>#</span> Reaction</div>
                    <div class="tag"><span>#</span> Inertia</div>
                    <div class="tag"><span>#</span> Patterning</div>
                    <div class="tag"><span>#</span> Superset</div>
                    <div class="tag"><span>#</span> Biomechanical Efficiency</div>
                    <div class="tag"><span>#</span> Kinematics</div>
                    <div class="tag"><span>#</span> Isometric Contraction </div>
                    <div class="tag"><span>#</span> Explosiveness</div>

                </div>
            </div>
            <div class="loop-slider" style="--duration:17038ms; --direction:reverse;">
                <div class="inner">
                    <div class="tag"><span>#</span> Absorption</div>
                    <div class="tag"><span>#</span> Proprioception</div>
                    <div class="tag"><span>#</span> Ground Contact Time</div>
                    <div class="tag"><span>#</span> Shifting Force </div>
                    <div class="tag"><span>#</span> Momentum</div>
                    <!-- duplicated content -->
                    <div class="tag"><span>#</span> Biomechanical Model</div>
                    <div class="tag"><span>#</span> Moment Force</div>
                    <div class="tag"><span>#</span> Shear Stress</div>
                    <div class="tag"><span>#</span> Neutral Spine</div>
                    <div class="tag"><span>#</span> Hinge</div>
                    <div class="tag"><span>#</span> Strength</div>
                    <div class="tag"><span>#</span> Circuit Training</div>
                    <div class="tag"><span>#</span> Moment Arm</div>
                    <div class="tag"><span>#</span> Inertia</div>
                    <div class="tag"><span>#</span> Torque</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <div class="tag"><span>#</span> Moment Arm</div>
                    <div class="tag"><span>#</span> Inertia</div>
                    <div class="tag"><span>#</span> Torque</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <div class="tag"><span>#</span> Angular Velocity</div>
                    <div class="tag"><span>#</span> GAIT</div>
                    <div class="tag"><span>#</span> Reaction</div>
                    <div class="tag"><span>#</span> Inertia</div>
                </div>
            </div>
            <div class="loop-slider" style="--duration:19328ms; --direction:normal;">
                <div class="inner">
                    <div class="tag"><span>#</span> NOVA</div>
                    <div class="tag"><span>#</span> Biomechanic</div>
                    <div class="tag"><span>#</span> Algorithim</div>
                    <div class="tag"><span>#</span>AI</div>
                    <div class="tag"><span>#</span>Future</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <!-- duplicated content -->
                    <div class="tag"><span>#</span> Kinematics</div>
                    <div class="tag"><span>#</span> Inertia</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <div class="tag"><span>#</span> NOVA</div>
                    <div class="tag"><span>#</span> Power</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <div class="tag"><span>#</span> Acceleration</div>
                    <div class="tag"><span>#</span> Angular Velocity</div>
                    <div class="tag"><span>#</span> NOVA</div>
                    <div class="tag"><span>#</span> Biomechanic</div>
                    <div class="tag"><span>#</span> Algorithim</div>
                    <div class="tag"><span>#</span>AI</div>
                    <div class="tag"><span>#</span>Future</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <!-- duplicated content -->
                    <div class="tag"><span>#</span> Kinematics</div>
                    <div class="tag"><span>#</span> Inertia</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <div class="tag"><span>#</span> NOVA</div>
                    <div class="tag"><span>#</span> Power</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <div class="tag"><span>#</span> Acceleration</div>
                    <div class="tag"><span>#</span> Angular Velocity</div>
                </div>
            </div>
            <div class="loop-slider" style="--duration:19077ms; --direction:reverse;">
                <div class="inner">
                    <div class="tag"><span>#</span> Superset</div>
                    <div class="tag"><span>#</span> Biomechanical Efficiency</div>
                    <div class="tag"><span>#</span> Kinematics</div>
                    <div class="tag"><span>#</span> Isometric Contraction </div>
                    <div class="tag"><span>#</span> Explosiveness</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <div class="tag"><span>#</span> Acceleration</div>
                    <div class="tag"><span>#</span> Angular Velocity</div>
                    <!-- duplicated content -->
                    <div class="tag"><span>#</span> Strength</div>
                    <div class="tag"><span>#</span> Circuit Training</div>
                    <div class="tag"><span>#</span> Moment Arm</div>
                    <div class="tag"><span>#</span> Inertia</div>
                    <div class="tag"><span>#</span> Torque</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <div class="tag"><span>#</span> Moment Arm</div>
                    <div class="tag"><span>#</span> Inertia</div>
                    <div class="tag"><span>#</span> Torque</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <div class="tag"><span>#</span> Inertia</div>
                    <div class="tag"><span>#</span> Torque</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <div class="tag"><span>#</span> Moment Arm</div>
                    <div class="tag"><span>#</span> Inertia</div>
                    <div class="tag"><span>#</span> Torque</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                </div>
            </div>
            <div class="loop-slider" style="--duration:20004ms; --direction:normal;">
                <div class="inner">
                    <div class="tag"><span>#</span> Balance</div>
                    <div class="tag"><span>#</span> Tailwind</div>
                    <div class="tag"><span>#</span> Plyometrics</div>
                    <div class="tag"><span>#</span> Acceleration</div>
                    <div class="tag"><span>#</span> NOVA</div>
                    <!-- duplicated content -->
                    <div class="tag"><span>#</span> Angular Velocity</div>
                    <div class="tag"><span>#</span> GAIT</div>
                    <div class="tag"><span>#</span> Reaction</div>
                    <div class="tag"><span>#</span> Inertia</div>
                    <div class="tag"><span>#</span> Patterning</div>
                    <div class="tag"><span>#</span> Balance</div>
                    <div class="tag"><span>#</span> Tailwind</div>
                    <div class="tag"><span>#</span> Plyometrics</div>
                    <div class="tag"><span>#</span> Acceleration</div>
                    <div class="tag"><span>#</span> NOVA</div>
                    <!-- duplicated content -->
                    <div class="tag"><span>#</span> Angular Velocity</div>
                    <div class="tag"><span>#</span> GAIT</div>
                    <div class="tag"><span>#</span> Reaction</div>
                    <div class="tag"><span>#</span> Inertia</div>
                    <div class="tag"><span>#</span> Patterning</div>
                    <div class="tag"><span>#</span> Superset</div>
                    <div class="tag"><span>#</span> Biomechanical Efficiency</div>
                    <div class="tag"><span>#</span> Kinematics</div>
                    <div class="tag"><span>#</span> Isometric Contraction </div>
                    <div class="tag"><span>#</span> Explosiveness</div>
                </div>
            </div>
            <div class="loop-slider" style="--duration:19788ms; --direction:reverse;">
                <div class="inner">
                    <div class="tag"><span>#</span> Absorption</div>
                    <div class="tag"><span>#</span> Proprioception</div>
                    <div class="tag"><span>#</span> Ground Contact Time</div>
                    <div class="tag"><span>#</span> Shifting Force </div>
                    <div class="tag"><span>#</span> Momentum</div>
                    <!-- duplicated content -->
                    <div class="tag"><span>#</span> Biomechanical Model</div>
                    <div class="tag"><span>#</span> Moment Force</div>
                    <div class="tag"><span>#</span> Shear Stress</div>
                    <div class="tag"><span>#</span> Neutral Spine</div>
                    <div class="tag"><span>#</span> Hinge</div>
                    <div class="tag"><span>#</span> Strength</div>
                    <div class="tag"><span>#</span> Circuit Training</div>
                    <div class="tag"><span>#</span> Moment Arm</div>
                    <div class="tag"><span>#</span> Inertia</div>
                    <div class="tag"><span>#</span> Torque</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <div class="tag"><span>#</span> Moment Arm</div>
                    <div class="tag"><span>#</span> Inertia</div>
                    <div class="tag"><span>#</span> Torque</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <div class="tag"><span>#</span> Angular Velocity</div>
                    <div class="tag"><span>#</span> GAIT</div>
                    <div class="tag"><span>#</span> Reaction</div>
                    <div class="tag"><span>#</span> Inertia</div>
                </div>
            </div>
            <div class="loop-slider" style="--duration:19046ms; --direction:normal;">
                <div class="inner">
                    <div class="tag"><span>#</span> NOVA</div>
                    <div class="tag"><span>#</span> Biomechanic</div>
                    <div class="tag"><span>#</span> Algorithim</div>
                    <div class="tag"><span>#</span>AI</div>
                    <div class="tag"><span>#</span>Future</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <!-- duplicated content -->
                    <div class="tag"><span>#</span> Kinematics</div>
                    <div class="tag"><span>#</span> Inertia</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <div class="tag"><span>#</span> NOVA</div>
                    <div class="tag"><span>#</span> Power</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <div class="tag"><span>#</span> Acceleration</div>
                    <div class="tag"><span>#</span> Angular Velocity</div>
                    <div class="tag"><span>#</span> NOVA</div>
                    <div class="tag"><span>#</span> Biomechanic</div>
                    <div class="tag"><span>#</span> Algorithim</div>
                    <div class="tag"><span>#</span>AI</div>
                    <div class="tag"><span>#</span>Future</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <!-- duplicated content -->
                    <div class="tag"><span>#</span> Kinematics</div>
                    <div class="tag"><span>#</span> Inertia</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <div class="tag"><span>#</span> NOVA</div>
                    <div class="tag"><span>#</span> Power</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <div class="tag"><span>#</span> Acceleration</div>
                    <div class="tag"><span>#</span> Angular Velocity</div>

                </div>
            </div>
            <div class="loop-slider" style="--duration:24116ms; --direction:reverse;">
                <div class="inner">
                    <div class="tag"><span>#</span> Superset</div>
                    <div class="tag"><span>#</span> Biomechanical Efficiency</div>
                    <div class="tag"><span>#</span> Kinematics</div>
                    <div class="tag"><span>#</span> Isometric Contraction </div>
                    <div class="tag"><span>#</span> Explosiveness</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <div class="tag"><span>#</span> Acceleration</div>
                    <div class="tag"><span>#</span> Angular Velocity</div>
                    <!-- duplicated content -->
                    <div class="tag"><span>#</span> Strength</div>
                    <div class="tag"><span>#</span> Circuit Training</div>
                    <div class="tag"><span>#</span> Moment Arm</div>
                    <div class="tag"><span>#</span> Inertia</div>
                    <div class="tag"><span>#</span> Torque</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <div class="tag"><span>#</span> Moment Arm</div>
                    <div class="tag"><span>#</span> Inertia</div>
                    <div class="tag"><span>#</span> Torque</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <div class="tag"><span>#</span> Inertia</div>
                    <div class="tag"><span>#</span> Torque</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                    <div class="tag"><span>#</span> Moment Arm</div>
                    <div class="tag"><span>#</span> Inertia</div>
                    <div class="tag"><span>#</span> Torque</div>
                    <div class="tag"><span>#</span> Elasticity</div>
                </div>
            </div>
            <div class="loop-slider" style="--duration:24603ms; --direction:normal;">
                <div class="inner">
                    <div class="tag"><span>#</span> Balance</div>
                    <div class="tag"><span>#</span> Tailwind</div>
                    <div class="tag"><span>#</span> Plyometrics</div>
                    <div class="tag"><span>#</span> Acceleration</div>
                    <div class="tag"><span>#</span> NOVA</div>
                    <!-- duplicated content -->
                    <div class="tag"><span>#</span> Angular Velocity</div>
                    <div class="tag"><span>#</span> GAIT</div>
                    <div class="tag"><span>#</span> Reaction</div>
                    <div class="tag"><span>#</span> Inertia</div>
                    <div class="tag"><span>#</span> Patterning</div>
                    <div class="tag"><span>#</span> Balance</div>
                    <div class="tag"><span>#</span> Tailwind</div>
                    <div class="tag"><span>#</span> Plyometrics</div>
                    <div class="tag"><span>#</span> Acceleration</div>
                    <div class="tag"><span>#</span> NOVA</div>
                    <!-- duplicated content -->
                    <div class="tag"><span>#</span> Angular Velocity</div>
                    <div class="tag"><span>#</span> GAIT</div>
                    <div class="tag"><span>#</span> Reaction</div>
                    <div class="tag"><span>#</span> Inertia</div>
                    <div class="tag"><span>#</span> Patterning</div>
                    <div class="tag"><span>#</span> Superset</div>
                    <div class="tag"><span>#</span> Biomechanical Efficiency</div>
                    <div class="tag"><span>#</span> Kinematics</div>
                    <div class="tag"><span>#</span> Isometric Contraction </div>
                    <div class="tag"><span>#</span> Explosiveness</div>

                </div>
            </div>
            <div class="fade"></div>
        </div>
    </div>
</body>

</html>
