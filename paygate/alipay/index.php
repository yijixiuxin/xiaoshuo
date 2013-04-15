<?php
/*
	*���ܣ�������Ʒ�й���Ϣ��������Ϣ
	*�汾��2.0
	*���ڣ�2008-08-01
	'˵����
	'���´���ֻ�Ƿ����̻����ԣ��ṩ���������룬�̻����Ը����Լ���վ����Ҫ�����ռ����ĵ���д,����һ��Ҫʹ�øô��롣
	'�ô������ѧϰ���о�֧�����ӿ�ʹ�ã�ֻ���ṩһ���ο���
*/

require_once("classes/alipay_service.php");

function makeurl(&$pay){
	global $mcharset, $cms_abs;
	$parameter = array(
		"service"			=> "create_direct_pay_by_user",	//��������
		"partner"			=> $pay->partner,			//�����̻���
		"return_url"		=> $pay->return_url,		//ͬ������
		"notify_url"		=> $pay->notify_url,		//�첽����
		"_input_charset"	=> $mcharset,				//�ַ�����Ĭ��ΪGBK
		"subject"			=> $pay->subject,			//��Ʒ���ƣ�����
		"body"				=> $pay->content,			//��Ʒ����������
		"out_trade_no"		=> $pay->order_sn,			//��Ʒ�ⲿ���׺ţ������֤Ψһ�ԣ�
		"total_fee"				=> $pay->totalfee,			//��Ʒ���ۣ�����۸���Ϊ0��
		"payment_type"		=> '1',						//Ĭ��Ϊ1,����Ҫ�޸�
/*		"quantity"			=> '1',						//��Ʒ����������

		"logistics_fee"		=> '0.00',					//�������ͷ���
		"logistics_payment"	=> 'BUYER_PAY',				//�������ø��ʽ��SELLER_PAY(����֧��)��BUYER_PAY(���֧��)��BUYER_PAY_AFTER_RECEIVE(��������)
		"logistics_type"	=> 'EXPRESS',				//�������ͷ�ʽ��POST(ƽ��)��EMS(EMS)��EXPRESS(�������)
*/
		"show_url"			=> $cms_abs,				//��Ʒ�����վ
		"seller_email"		=> $pay->account			//�������䣬����
	);
	$alipay = new alipay_service($parameter,$pay->keyt,'MD5', $mcharset, 'http');
	return $alipay->create_url();
}
?>
