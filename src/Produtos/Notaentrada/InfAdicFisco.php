<?php

namespace OmieLib\Produtos\Notaentrada;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Notaentrada\Request\NeAlterarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeConsultarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeExcluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeIncluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeListarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeStatusRequest;
use OmieLib\Produtos\Notaentrada\Response\NeAlterarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeConsultarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeExcluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeIncluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeListarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeStatusResponse;

/**
 * Informações adicionais de interesse do fisco.
 *
 * @pw_element string $cRegimeEsp Possui regime especial S/N.
 * @pw_element string $cObsSped Observação para uso exclusivo do SPED (Registro C110). <BR><BR>(Necessário preencher campo cRegimeEsp "S" para alterar esta informação).
 * @pw_element string $cInfAdic Informações Adicionais de interesse do Fisco para a Nota Fiscal.
 * @pw_complex infAdicFisco
 */
class InfAdicFisco{
	/**
	 * Possui regime especial S/N.
	 *
	 * @var string
	 */
	public string $cRegimeEsp;
	/**
	 * Observação para uso exclusivo do SPED (Registro C110). <BR><BR>(Necessário preencher campo cRegimeEsp "S" para alterar esta informação).
	 *
	 * @var string
	 */
	public string $cObsSped;
	/**
	 * Informações Adicionais de interesse do Fisco para a Nota Fiscal.
	 *
	 * @var string
	 */
	public string $cInfAdic;
}
