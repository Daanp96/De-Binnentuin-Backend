<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;
class AuthController extends Controller
{

    public function signup(Request $request)
    {
      /* Hieronder worden de ingevoerd variabelen gecheckd voordat ze toegevoegd worden aan de database */
        $request->validate([
            'naam' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed',
            'rekeningNummer' => 'required|string',
            'adres' => 'required|string'
        ]);

        /* Hieronder worden de ingevoerd variabelen toegevoegd aan de database */
        $users = new User([
            'naam' => $request->naam,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'rekeningNummer' => $request->rekeningNummer,
            'adres'=>$request->adres,

        ]);

        /* Hieronder word er feedback gegeven richting de Frontend om te laten weten dat een user succesvol is toegevoegd aan de database */
        $users->save();
        return response()->json([
            'message' => 'Successfully created user!'
        ], 201);
    }

    public function login(Request $request)
    {
      /* Hieronder worden de ingevoerd variabelen gecheckd voor het inloggen */
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);

        /* Hieronder worden de ingevoerd variabelen gecheckd zodat ze gebruiker vervolgens zou kunnen inloggen */
        $credentials = request(['email', 'password']);
        if(!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);

        /* Hieronder zijn verschillende veiligheidsmaatregelen genomen voor onze gebruikers */
        $users = $request->user();
        $tokenResult = $users->createToken('Personal Access Token');
        $token = $tokenResult->token;
        if ($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);
        $token->save();

        /* Hieronder word er feedback gegeven richting de Frontend om te laten weten dat een user succesvol is ingelogd*/
        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'status' => 'Succesvol ingelogd!',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ]);
    }

}
