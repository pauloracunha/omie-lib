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
 * Informações adicionais outros detalhes da nota de entrada
 *
 * @pw_element string $dDataSaida Data de entrada/saída
 * @pw_element string $cHoraSaida Hora de entrada/saída
 * @pw_element string $cNatOperacao Natureza de operação
 * @pw_element string $indIntermediario Indicador de Intermediador.<BR><BR>Preenchimento Opcional. <BR><BR>Esta informação deverá ser enviada quando se tratar de uma operação não presencial.<BR><BR>Opções disponíveis:<BR>   0=Operação sem intermediador(em site ou plataforma própria)<BR>   1=Operação em site ou plataforma de terceiros(intermediadores/marketplace)<BR><BR>Se não informado, utilizaremos automaticamente a opção "0-Operação sem intermediador(em site ou plataforma própria)".<BR><BR>Informação localizada na Aba "Informações Adicionais"
 * @pw_element string $indPresenca Indicador de Presença da Operação
 * @pw_element string $identIntermediario Identificação no Intermediador.<BR><BR>Preenchimento obrigatório caso o Indicador de Intermediador seja igual a opção "1-Operação em site ou plataforma de terceiros(intermediadores/marketplace)".<BR><BR>Este identificador pode ser o nome do usuário ou identificação do perfil do vendedor no site do intermediador.<BR><BR>Informação localizada na Aba "Informações Adicionais".
 * @pw_element string $cnpjIntermediario CNPJ do Intermediador.<BR><BR>Preencimento obrigatório caso o Indicador de Intermediador seja igual a opção "1-Operação em site ou plataforma de terceiros(intermediadores/marketplace)".<BR><BR>Este campo representa o CNPJ do Intermediador da Transação.<BR><BR>Informação localizada na Aba "Informações Adicionais".
 * @pw_element infCanaAcucar $infCanaAcucar Informações da aquisição de Cana-de-açúcar
 * @pw_complex outrosDet
 */
class OutrosDet{
	/**
	 * Data de entrada/saída
	 *
	 * @var string
	 */
	public string $dDataSaida;
	/**
	 * Hora de entrada/saída
	 *
	 * @var string
	 */
	public string $cHoraSaida;
	/**
	 * Natureza de operação
	 *
	 * @var string
	 */
	public string $cNatOperacao;
	/**
	 * Indicador de Intermediador.<BR><BR>Preenchimento Opcional. <BR><BR>Esta informação deverá ser enviada quando se tratar de uma operação não presencial.<BR><BR>Opções disponíveis:<BR>   0=Operação sem intermediador(em site ou plataforma própria)<BR>   1=Operação em site ou plataforma de terceiros(intermediadores/marketplace)<BR><BR>Se não informado, utilizaremos automaticamente a opção "0-Operação sem intermediador(em site ou plataforma própria)".<BR><BR>Informação localizada na Aba "Informações Adicionais"
	 *
	 * @var string
	 */
	public string $indIntermediario;
	/**
	 * Indicador de Presença da Operação
	 *
	 * @var string
	 */
	public string $indPresenca;
	/**
	 * Identificação no Intermediador.<BR><BR>Preenchimento obrigatório caso o Indicador de Intermediador seja igual a opção "1-Operação em site ou plataforma de terceiros(intermediadores/marketplace)".<BR><BR>Este identificador pode ser o nome do usuário ou identificação do perfil do vendedor no site do intermediador.<BR><BR>Informação localizada na Aba "Informações Adicionais".
	 *
	 * @var string
	 */
	public string $identIntermediario;
	/**
	 * CNPJ do Intermediador.<BR><BR>Preencimento obrigatório caso o Indicador de Intermediador seja igual a opção "1-Operação em site ou plataforma de terceiros(intermediadores/marketplace)".<BR><BR>Este campo representa o CNPJ do Intermediador da Transação.<BR><BR>Informação localizada na Aba "Informações Adicionais".
	 *
	 * @var string
	 */
	public string $cnpjIntermediario;
	/**
	 * Informações da aquisição de Cana-de-açúcar
	 *
	 * @var InfCanaAcucar
	 */
	public InfCanaAcucar $infCanaAcucar;
}
