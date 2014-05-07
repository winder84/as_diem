<?php
/**
 * Contact actions
 */
class contactActions extends myFrontModuleActions
{

	public function executeFormWidget(dmWebRequest $request)
	{
		$form = $this->forms['Contact'];

		if ($request->isMethod('post') && $form->bindAndValid($request))
		{
			if ($request['botScan'] == 'hjk5u2s6es72cg1s9gmh7p8rs4') {
				$form->save();
				$this->redirectBack();
			}
		}
	}


}
