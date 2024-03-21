<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\UserRequestService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class ReportsController extends Controller
{
    private $userRequestService;

    public function __construct(
        UserRequestService $userRequestService,
    ) {
        $this->userRequestService = $userRequestService;
    }

    public function index(Request $request)
    {
        $data = $request->all();
        try {
            $userRequests = $this->userRequestService->getRequests($data);
            return view('pages.reports.index', compact('userRequests'));
        } catch (Throwable $e) {
            report($e);
            return redirect()->route('web.index')->withErrors($e->getMessage());
        }
    }

    public function allow(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $this->userRequestService->allow($id);
            DB::commit();
            return redirect()->route('web.reports.index')->withStatus(trans('common.update_successfully'));
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('web.reports.index')->withErrors($e->getMessage());
        }
    }

    public function reject(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $this->userRequestService->reject($id);
            DB::commit();
            return redirect()->route('web.reports.index')->withStatus(trans('common.update_successfully'));
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('web.reports.index')->withErrors($e->getMessage());
        }
    }

    public function revert(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $this->userRequestService->revert($id);
            DB::commit();
            return redirect()->route('web.reports.index')->withStatus(trans('common.update_successfully'));
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('web.reports.index')->withErrors($e->getMessage());
        }
    }

    public function destroy(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $this->userRequestService->delete($id);
            DB::commit();
            return redirect()->route('web.reports.index')->withStatus(trans('common.delete_successfully'));
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('web.reports.index')->withErrors($e->getMessage());
        }
    }
}
